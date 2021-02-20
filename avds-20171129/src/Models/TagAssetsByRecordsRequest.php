<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class TagAssetsByRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var int[]
     */
    public $recordIds;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'source'    => 'Source',
        'assetType' => 'AssetType',
        'tags'      => 'Tags',
        'recordIds' => 'RecordIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->recordIds) {
            $res['RecordIds'] = $this->recordIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagAssetsByRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = $map['RecordIds'];
            }
        }

        return $model;
    }
}
