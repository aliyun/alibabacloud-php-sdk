<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateEtlJobRequest;

use AlibabaCloud\Tea\Model;

class sourceConfig extends Model
{
    /**
     * @var string
     */
    public $logstoreName;
    protected $_name = [
        'logstoreName' => 'logstoreName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstoreName) {
            $res['logstoreName'] = $this->logstoreName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstoreName'])) {
            $model->logstoreName = $map['logstoreName'];
        }

        return $model;
    }
}
