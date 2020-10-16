<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\AddDataSourceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $kafkaTopic;

    /**
     * @var string
     */
    public $ossPath;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'kafkaTopic'   => 'KafkaTopic',
        'ossPath'      => 'OssPath',
    ];

    public function validate()
    {
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('kafkaTopic', $this->kafkaTopic, true);
        Model::validateRequired('ossPath', $this->ossPath, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->kafkaTopic) {
            $res['KafkaTopic'] = $this->kafkaTopic;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['KafkaTopic'])) {
            $model->kafkaTopic = $map['KafkaTopic'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        return $model;
    }
}
