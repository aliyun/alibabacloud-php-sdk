<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListStorageStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $totalStore;

    /**
     * @var string
     */
    public $unusedStore;

    /**
     * @var string
     */
    public $usedStore;
    protected $_name = [
        'corpId'      => 'CorpId',
        'number'      => 'Number',
        'totalStore'  => 'TotalStore',
        'unusedStore' => 'UnusedStore',
        'usedStore'   => 'UsedStore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->totalStore) {
            $res['TotalStore'] = $this->totalStore;
        }
        if (null !== $this->unusedStore) {
            $res['UnusedStore'] = $this->unusedStore;
        }
        if (null !== $this->usedStore) {
            $res['UsedStore'] = $this->usedStore;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['TotalStore'])) {
            $model->totalStore = $map['TotalStore'];
        }
        if (isset($map['UnusedStore'])) {
            $model->unusedStore = $map['UnusedStore'];
        }
        if (isset($map['UsedStore'])) {
            $model->usedStore = $map['UsedStore'];
        }

        return $model;
    }
}
