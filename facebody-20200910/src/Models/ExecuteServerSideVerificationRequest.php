<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20200910\Models;

use AlibabaCloud\Tea\Model;

class ExecuteServerSideVerificationRequest extends Model
{
    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificateNumber;

    /**
     * @var int[]
     */
    public $facialPictureData;

    /**
     * @var string
     */
    public $facialPictureUrl;

    /**
     * @var string
     */
    public $sceneType;
    protected $_name = [
        'certificateName'   => 'certificateName',
        'certificateNumber' => 'certificateNumber',
        'facialPictureData' => 'facialPictureData',
        'facialPictureUrl'  => 'facialPictureUrl',
        'sceneType'         => 'sceneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateName) {
            $res['certificateName'] = $this->certificateName;
        }
        if (null !== $this->certificateNumber) {
            $res['certificateNumber'] = $this->certificateNumber;
        }
        if (null !== $this->facialPictureData) {
            $res['facialPictureData'] = $this->facialPictureData;
        }
        if (null !== $this->facialPictureUrl) {
            $res['facialPictureUrl'] = $this->facialPictureUrl;
        }
        if (null !== $this->sceneType) {
            $res['sceneType'] = $this->sceneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteServerSideVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certificateName'])) {
            $model->certificateName = $map['certificateName'];
        }
        if (isset($map['certificateNumber'])) {
            $model->certificateNumber = $map['certificateNumber'];
        }
        if (isset($map['facialPictureData'])) {
            $model->facialPictureData = $map['facialPictureData'];
        }
        if (isset($map['facialPictureUrl'])) {
            $model->facialPictureUrl = $map['facialPictureUrl'];
        }
        if (isset($map['sceneType'])) {
            $model->sceneType = $map['sceneType'];
        }

        return $model;
    }
}
