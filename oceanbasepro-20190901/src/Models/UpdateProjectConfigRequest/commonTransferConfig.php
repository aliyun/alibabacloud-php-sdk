<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest;

use AlibabaCloud\Tea\Model;

class commonTransferConfig extends Model
{
    /**
     * @var string
     */
    public $sinkStoreFormat;

    /**
     * @var string
     */
    public $sourceStoreFormat;
    protected $_name = [
        'sinkStoreFormat'   => 'SinkStoreFormat',
        'sourceStoreFormat' => 'SourceStoreFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sinkStoreFormat) {
            $res['SinkStoreFormat'] = $this->sinkStoreFormat;
        }
        if (null !== $this->sourceStoreFormat) {
            $res['SourceStoreFormat'] = $this->sourceStoreFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonTransferConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SinkStoreFormat'])) {
            $model->sinkStoreFormat = $map['SinkStoreFormat'];
        }
        if (isset($map['SourceStoreFormat'])) {
            $model->sourceStoreFormat = $map['SourceStoreFormat'];
        }

        return $model;
    }
}
