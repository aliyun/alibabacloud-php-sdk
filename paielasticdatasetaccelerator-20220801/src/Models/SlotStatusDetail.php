<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class SlotStatusDetail extends Model
{
    /**
     * @var int
     */
    public $loadedFileNum;

    /**
     * @var string
     */
    public $loadedFileSize;

    /**
     * @var int
     */
    public $loadingTimeCost;
    protected $_name = [
        'loadedFileNum' => 'LoadedFileNum',
        'loadedFileSize' => 'LoadedFileSize',
        'loadingTimeCost' => 'LoadingTimeCost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
