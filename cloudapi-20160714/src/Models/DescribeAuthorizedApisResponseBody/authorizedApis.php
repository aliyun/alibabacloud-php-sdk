<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponseBody\authorizedApis\authorizedApi;

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
        if (\is_array($this->authorizedApi)) {
            Model::validateArray($this->authorizedApi);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedApi) {
            if (\is_array($this->authorizedApi)) {
                $res['AuthorizedApi'] = [];
                $n1 = 0;
                foreach ($this->authorizedApi as $item1) {
                    $res['AuthorizedApi'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedApi'])) {
            if (!empty($map['AuthorizedApi'])) {
                $model->authorizedApi = [];
                $n1 = 0;
                foreach ($map['AuthorizedApi'] as $item1) {
                    $model->authorizedApi[$n1] = authorizedApi::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
