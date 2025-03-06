<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponseBody\authorizedApis\authorizedApi;
use AlibabaCloud\Tea\Model;

class authorizedApis extends Model
{
    /**
     * @var authorizedApi[]
     */
    public $authorizedApi;
    protected $_name = [
        'authorizedApi' => 'AuthorizedApi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedApi) {
            $res['AuthorizedApi'] = [];
            if (null !== $this->authorizedApi && \is_array($this->authorizedApi)) {
                $n = 0;
                foreach ($this->authorizedApi as $item) {
                    $res['AuthorizedApi'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedApis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedApi'])) {
            if (!empty($map['AuthorizedApi'])) {
                $model->authorizedApi = [];
                $n                    = 0;
                foreach ($map['AuthorizedApi'] as $item) {
                    $model->authorizedApi[$n++] = null !== $item ? authorizedApi::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
