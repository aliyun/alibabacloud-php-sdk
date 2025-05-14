<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks\networkTopology;

use AlibabaCloud\Dara\Model;

class sources extends Model
{
    /**
     * @var string
     */
    public $sourceFileSystemPath;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'sourceFileSystemPath' => 'SourceFileSystemPath',
        'sourceId' => 'SourceId',
        'sourceRegion' => 'SourceRegion',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceFileSystemPath) {
            $res['SourceFileSystemPath'] = $this->sourceFileSystemPath;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['SourceFileSystemPath'])) {
            $model->sourceFileSystemPath = $map['SourceFileSystemPath'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
