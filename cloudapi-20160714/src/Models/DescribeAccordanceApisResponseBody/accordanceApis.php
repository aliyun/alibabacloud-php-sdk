<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccordanceApisResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccordanceApisResponseBody\accordanceApis\accordanceApi;
use AlibabaCloud\Tea\Model;

class accordanceApis extends Model
{
    /**
     * @var accordanceApi[]
     */
    public $accordanceApi;
    protected $_name = [
        'accordanceApi' => 'AccordanceApi',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accordanceApi) {
            $res['AccordanceApi'] = [];
            if (null !== $this->accordanceApi && \is_array($this->accordanceApi)) {
                $n = 0;
                foreach ($this->accordanceApi as $item) {
                    $res['AccordanceApi'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accordanceApis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccordanceApi'])) {
            if (!empty($map['AccordanceApi'])) {
                $model->accordanceApi = [];
                $n                    = 0;
                foreach ($map['AccordanceApi'] as $item) {
                    $model->accordanceApi[$n++] = null !== $item ? accordanceApi::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
