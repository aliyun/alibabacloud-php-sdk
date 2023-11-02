<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example aliyun.siem.alert_datasource.sas
     *
     * @var string
     */
    public $source;

    /**
     * @example sas
     *
     * @var string
     */
    public $sourceName;
    protected $_name = [
        'source'     => 'Source',
        'sourceName' => 'SourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        return $model;
    }
}
