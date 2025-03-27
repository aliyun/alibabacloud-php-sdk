<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class IllustrationTaskCreateCmd extends Model
{
    /**
     * @var int
     */
    public $backgroundType;

    /**
     * @var int
     */
    public $dstHeight;

    /**
     * @var int
     */
    public $dstWidth;

    /**
     * @var string
     */
    public $idempotentId;

    /**
     * @var string[]
     */
    public $imageUrls;

    /**
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
        'dstHeight' => 'dstHeight',
        'dstWidth' => 'dstWidth',
        'idempotentId' => 'idempotentId',
        'imageUrls' => 'imageUrls',
        'nums' => 'nums',
        'ossPaths' => 'ossPaths',
        'stickerText' => 'stickerText',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        if (\is_array($this->ossPaths)) {
            Model::validateArray($this->ossPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['imageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['imageUrls'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nums) {
            $res['nums'] = $this->nums;
        }

        if (null !== $this->ossPaths) {
            if (\is_array($this->ossPaths)) {
                $res['ossPaths'] = [];
                $n1 = 0;
                foreach ($this->ossPaths as $item1) {
                    $res['ossPaths'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stickerText) {
            $res['stickerText'] = $this->stickerText;
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

        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['imageUrls'] as $item1) {
                    $model->imageUrls[$n1++] = $item1;
                }
            }
        }

        if (isset($map['nums'])) {
            $model->nums = $map['nums'];
        }

        if (isset($map['ossPaths'])) {
            if (!empty($map['ossPaths'])) {
                $model->ossPaths = [];
                $n1 = 0;
                foreach ($map['ossPaths'] as $item1) {
                    $model->ossPaths[$n1++] = $item1;
                }
            }
        }

        if (isset($map['stickerText'])) {
            $model->stickerText = $map['stickerText'];
        }

        return $model;
    }
}
