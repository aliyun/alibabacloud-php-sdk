<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\blockPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\blockRect;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\charInfos;
use AlibabaCloud\Tea\Model;

class blockDetails extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $blockAngle;

    /**
     * @example 98
     *
     * @var int
     */
    public $blockConfidence;

    /**
     * @var string
     */
    public $blockContent;

    /**
     * @example 0
     *
     * @var int
     */
    public $blockId;

    /**
     * @var blockPoints[]
     */
    public $blockPoints;

    /**
     * @var blockRect
     */
    public $blockRect;

    /**
     * @var charInfos[]
     */
    public $charInfos;
    protected $_name = [
        'blockAngle'      => 'BlockAngle',
        'blockConfidence' => 'BlockConfidence',
        'blockContent'    => 'BlockContent',
        'blockId'         => 'BlockId',
        'blockPoints'     => 'BlockPoints',
        'blockRect'       => 'BlockRect',
        'charInfos'       => 'CharInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockAngle) {
            $res['BlockAngle'] = $this->blockAngle;
        }
        if (null !== $this->blockConfidence) {
            $res['BlockConfidence'] = $this->blockConfidence;
        }
        if (null !== $this->blockContent) {
            $res['BlockContent'] = $this->blockContent;
        }
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }
        if (null !== $this->blockPoints) {
            $res['BlockPoints'] = [];
            if (null !== $this->blockPoints && \is_array($this->blockPoints)) {
                $n = 0;
                foreach ($this->blockPoints as $item) {
                    $res['BlockPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->blockRect) {
            $res['BlockRect'] = null !== $this->blockRect ? $this->blockRect->toMap() : null;
        }
        if (null !== $this->charInfos) {
            $res['CharInfos'] = [];
            if (null !== $this->charInfos && \is_array($this->charInfos)) {
                $n = 0;
                foreach ($this->charInfos as $item) {
                    $res['CharInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockAngle'])) {
            $model->blockAngle = $map['BlockAngle'];
        }
        if (isset($map['BlockConfidence'])) {
            $model->blockConfidence = $map['BlockConfidence'];
        }
        if (isset($map['BlockContent'])) {
            $model->blockContent = $map['BlockContent'];
        }
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }
        if (isset($map['BlockPoints'])) {
            if (!empty($map['BlockPoints'])) {
                $model->blockPoints = [];
                $n                  = 0;
                foreach ($map['BlockPoints'] as $item) {
                    $model->blockPoints[$n++] = null !== $item ? blockPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BlockRect'])) {
            $model->blockRect = blockRect::fromMap($map['BlockRect']);
        }
        if (isset($map['CharInfos'])) {
            if (!empty($map['CharInfos'])) {
                $model->charInfos = [];
                $n                = 0;
                foreach ($map['CharInfos'] as $item) {
                    $model->charInfos[$n++] = null !== $item ? charInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
