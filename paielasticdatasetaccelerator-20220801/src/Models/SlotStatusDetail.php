<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class SlotStatusDetail extends Model
{
    /**
     * @example 1000000
     *
     * @var int
     */
    public $loadedFileNum;

    /**
     * @example 200G
     *
     * @var string
     */
    public $loadedFileSize;

    /**
     * @example 1800000
     *
     * @var int
     */
    public $loadingTimeCost;
    protected $_name = [
        'loadedFileNum'   => 'LoadedFileNum',
        'loadedFileSize'  => 'LoadedFileSize',
        'loadingTimeCost' => 'LoadingTimeCost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadedFileNum) {
            $res['LoadedFileNum'] = $this->loadedFileNum;
        }
        if (null !== $this->loadedFileSize) {
            $res['LoadedFileSize'] = $this->loadedFileSize;
        }
        if (null !== $this->loadingTimeCost) {
            $res['LoadingTimeCost'] = $this->loadingTimeCost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SlotStatusDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadedFileNum'])) {
            $model->loadedFileNum = $map['LoadedFileNum'];
        }
        if (isset($map['LoadedFileSize'])) {
            $model->loadedFileSize = $map['LoadedFileSize'];
        }
        if (isset($map['LoadingTimeCost'])) {
            $model->loadingTimeCost = $map['LoadingTimeCost'];
        }

        return $model;
    }
}
