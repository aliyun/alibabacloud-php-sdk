<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class IllustrationTaskCreateCmd extends Model
{
    /**
     * @example 0-不换背景，1-换背景
     *
     * @var int
     */
    public $backgroundType;

    /**
     * @example 1024
     *
     * @var int
     */
    public $dstHeight;

    /**
     * @example 1024
     *
     * @var int
     */
    public $dstWidth;

    /**
     * @example 28274623764834
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @example 4
     *
     * @var int
     */
    public $nums;

    /**
     * @var string[]
     */
    public $ossPaths;

    /**
     * @var string
     */
    public $stickerText;
    protected $_name = [
        'backgroundType' => 'backgroundType',
        'dstHeight'      => 'dstHeight',
        'dstWidth'       => 'dstWidth',
        'idempotentId'   => 'idempotentId',
        'nums'           => 'nums',
        'ossPaths'       => 'ossPaths',
        'stickerText'    => 'stickerText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundType) {
            $res['backgroundType'] = $this->backgroundType;
        }
        if (null !== $this->dstHeight) {
            $res['dstHeight'] = $this->dstHeight;
        }
        if (null !== $this->dstWidth) {
            $res['dstWidth'] = $this->dstWidth;
        }
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }
        if (null !== $this->nums) {
            $res['nums'] = $this->nums;
        }
        if (null !== $this->ossPaths) {
            $res['ossPaths'] = $this->ossPaths;
        }
        if (null !== $this->stickerText) {
            $res['stickerText'] = $this->stickerText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IllustrationTaskCreateCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backgroundType'])) {
            $model->backgroundType = $map['backgroundType'];
        }
        if (isset($map['dstHeight'])) {
            $model->dstHeight = $map['dstHeight'];
        }
        if (isset($map['dstWidth'])) {
            $model->dstWidth = $map['dstWidth'];
        }
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }
        if (isset($map['nums'])) {
            $model->nums = $map['nums'];
        }
        if (isset($map['ossPaths'])) {
            if (!empty($map['ossPaths'])) {
                $model->ossPaths = $map['ossPaths'];
            }
        }
        if (isset($map['stickerText'])) {
            $model->stickerText = $map['stickerText'];
        }

        return $model;
    }
}
