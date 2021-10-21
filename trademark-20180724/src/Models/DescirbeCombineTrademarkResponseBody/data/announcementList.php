<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data;

use AlibabaCloud\Tea\Model;

class announcementList extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $annDate;

    /**
     * @var string
     */
    public $originalImageUrl;

    /**
     * @var string
     */
    public $annTypeName;

    /**
     * @var string
     */
    public $annNumber;

    /**
     * @var string
     */
    public $annTypeCode;
    protected $_name = [
        'imageUrl'         => 'ImageUrl',
        'annDate'          => 'AnnDate',
        'originalImageUrl' => 'OriginalImageUrl',
        'annTypeName'      => 'AnnTypeName',
        'annNumber'        => 'AnnNumber',
        'annTypeCode'      => 'AnnTypeCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->annDate) {
            $res['AnnDate'] = $this->annDate;
        }
        if (null !== $this->originalImageUrl) {
            $res['OriginalImageUrl'] = $this->originalImageUrl;
        }
        if (null !== $this->annTypeName) {
            $res['AnnTypeName'] = $this->annTypeName;
        }
        if (null !== $this->annNumber) {
            $res['AnnNumber'] = $this->annNumber;
        }
        if (null !== $this->annTypeCode) {
            $res['AnnTypeCode'] = $this->annTypeCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return announcementList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['AnnDate'])) {
            $model->annDate = $map['AnnDate'];
        }
        if (isset($map['OriginalImageUrl'])) {
            $model->originalImageUrl = $map['OriginalImageUrl'];
        }
        if (isset($map['AnnTypeName'])) {
            $model->annTypeName = $map['AnnTypeName'];
        }
        if (isset($map['AnnNumber'])) {
            $model->annNumber = $map['AnnNumber'];
        }
        if (isset($map['AnnTypeCode'])) {
            $model->annTypeCode = $map['AnnTypeCode'];
        }

        return $model;
    }
}
