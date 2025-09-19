<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAIAssetSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class sensitiveSummary extends Model
{
    /**
     * @var int
     */
    public $containerImageCnt;

    /**
     * @var int
     */
    public $ecsCnt;

    /**
     * @var int
     */
    public $imageCnt;

    /**
     * @var int
     */
    public $snapshotCnt;

    /**
     * @var int
     */
    public $totalCnt;
    protected $_name = [
        'containerImageCnt' => 'ContainerImageCnt',
        'ecsCnt' => 'EcsCnt',
        'imageCnt' => 'ImageCnt',
        'snapshotCnt' => 'SnapshotCnt',
        'totalCnt' => 'TotalCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerImageCnt) {
            $res['ContainerImageCnt'] = $this->containerImageCnt;
        }

        if (null !== $this->ecsCnt) {
            $res['EcsCnt'] = $this->ecsCnt;
        }

        if (null !== $this->imageCnt) {
            $res['ImageCnt'] = $this->imageCnt;
        }

        if (null !== $this->snapshotCnt) {
            $res['SnapshotCnt'] = $this->snapshotCnt;
        }

        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
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
        if (isset($map['ContainerImageCnt'])) {
            $model->containerImageCnt = $map['ContainerImageCnt'];
        }

        if (isset($map['EcsCnt'])) {
            $model->ecsCnt = $map['EcsCnt'];
        }

        if (isset($map['ImageCnt'])) {
            $model->imageCnt = $map['ImageCnt'];
        }

        if (isset($map['SnapshotCnt'])) {
            $model->snapshotCnt = $map['SnapshotCnt'];
        }

        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }

        return $model;
    }
}
