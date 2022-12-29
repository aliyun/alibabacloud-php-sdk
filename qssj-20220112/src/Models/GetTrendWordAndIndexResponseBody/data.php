<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendWordAndIndexResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1.0023898331
     *
     * @var float
     */
    public $brandIndex;

    /**
     * @example 1623
     *
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @example 1.236972369
     *
     * @var float
     */
    public $ecommerceIndex;

    /**
     * @example 0.438129369
     *
     * @var float
     */
    public $institutionalIndex;

    /**
     * @example 0.9732739173
     *
     * @var float
     */
    public $mediaIndex;

    /**
     * @example 1.6200038123
     *
     * @var float
     */
    public $socialIndex;

    /**
     * @example 1.000000730
     *
     * @var float
     */
    public $trendIndex;

    /**
     * @var string
     */
    public $trendWord;

    /**
     * @example "202205"
     *
     * @var string
     */
    public $yearMonth;
    protected $_name = [
        'brandIndex'         => 'BrandIndex',
        'cateId'             => 'CateId',
        'cateName'           => 'CateName',
        'ecommerceIndex'     => 'EcommerceIndex',
        'institutionalIndex' => 'InstitutionalIndex',
        'mediaIndex'         => 'MediaIndex',
        'socialIndex'        => 'SocialIndex',
        'trendIndex'         => 'TrendIndex',
        'trendWord'          => 'TrendWord',
        'yearMonth'          => 'YearMonth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandIndex) {
            $res['BrandIndex'] = $this->brandIndex;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->ecommerceIndex) {
            $res['EcommerceIndex'] = $this->ecommerceIndex;
        }
        if (null !== $this->institutionalIndex) {
            $res['InstitutionalIndex'] = $this->institutionalIndex;
        }
        if (null !== $this->mediaIndex) {
            $res['MediaIndex'] = $this->mediaIndex;
        }
        if (null !== $this->socialIndex) {
            $res['SocialIndex'] = $this->socialIndex;
        }
        if (null !== $this->trendIndex) {
            $res['TrendIndex'] = $this->trendIndex;
        }
        if (null !== $this->trendWord) {
            $res['TrendWord'] = $this->trendWord;
        }
        if (null !== $this->yearMonth) {
            $res['YearMonth'] = $this->yearMonth;
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
        if (isset($map['BrandIndex'])) {
            $model->brandIndex = $map['BrandIndex'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['EcommerceIndex'])) {
            $model->ecommerceIndex = $map['EcommerceIndex'];
        }
        if (isset($map['InstitutionalIndex'])) {
            $model->institutionalIndex = $map['InstitutionalIndex'];
        }
        if (isset($map['MediaIndex'])) {
            $model->mediaIndex = $map['MediaIndex'];
        }
        if (isset($map['SocialIndex'])) {
            $model->socialIndex = $map['SocialIndex'];
        }
        if (isset($map['TrendIndex'])) {
            $model->trendIndex = $map['TrendIndex'];
        }
        if (isset($map['TrendWord'])) {
            $model->trendWord = $map['TrendWord'];
        }
        if (isset($map['YearMonth'])) {
            $model->yearMonth = $map['YearMonth'];
        }

        return $model;
    }
}
