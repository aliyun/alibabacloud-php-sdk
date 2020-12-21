<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\AddDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $kafkaTopic;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'kafkaTopic'   => 'KafkaTopic',
        'dataSourceId' => 'DataSourceId',
        'ossPath'      => 'OssPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kafkaTopic) {
            $res['KafkaTopic'] = $this->kafkaTopic;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
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
        if (isset($map['KafkaTopic'])) {
            $model->kafkaTopic = $map['KafkaTopic'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}
