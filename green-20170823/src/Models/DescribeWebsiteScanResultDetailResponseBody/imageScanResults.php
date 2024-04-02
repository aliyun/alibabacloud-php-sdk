<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteScanResultDetailResponseBody;

use AlibabaCloud\Tea\Model;

class imageScanResults extends Model
{
    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'labels' => 'Labels',
        'url'    => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageScanResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
