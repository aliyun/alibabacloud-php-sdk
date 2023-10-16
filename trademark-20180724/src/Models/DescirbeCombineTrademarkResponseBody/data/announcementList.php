<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\DescirbeCombineTrademarkResponseBody\data;

use AlibabaCloud\Tea\Model;

class announcementList extends Model
{
    /**
     * @var string
     */
    public $annDate;

    /**
     * @var string
     */
    public $annNumber;

    /**
     * @var string
     */
    public $annTypeCode;

    /**
     * @var string
     */
    public $annTypeName;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $originalImageUrl;
    protected $_name = [
        'annDate'          => 'AnnDate',
        'annNumber'        => 'AnnNumber',
        'annTypeCode'      => 'AnnTypeCode',
        'annTypeName'      => 'AnnTypeName',
        'imageUrl'         => 'ImageUrl',
        'originalImageUrl' => 'OriginalImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annDate) {
            $res['AnnDate'] = $this->annDate;
        }
        if (null !== $this->annNumber) {
            $res['AnnNumber'] = $this->annNumber;
        }
        if (null !== $this->annTypeCode) {
            $res['AnnTypeCode'] = $this->annTypeCode;
        }
        if (null !== $this->annTypeName) {
            $res['AnnTypeName'] = $this->annTypeName;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->originalImageUrl) {
            $res['OriginalImageUrl'] = $this->originalImageUrl;
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
        if (isset($map['AnnDate'])) {
            $model->annDate = $map['AnnDate'];
        }
        if (isset($map['AnnNumber'])) {
            $model->annNumber = $map['AnnNumber'];
        }
        if (isset($map['AnnTypeCode'])) {
            $model->annTypeCode = $map['AnnTypeCode'];
        }
        if (isset($map['AnnTypeName'])) {
            $model->annTypeName = $map['AnnTypeName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['OriginalImageUrl'])) {
            $model->originalImageUrl = $map['OriginalImageUrl'];
        }

        return $model;
    }
}
