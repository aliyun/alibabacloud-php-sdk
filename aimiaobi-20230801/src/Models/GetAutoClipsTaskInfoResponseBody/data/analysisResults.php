<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\analysisResults\lensInfos;

class analysisResults extends Model
{
    /**
     * @var lensInfos[]
     */
    public $lensInfos;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $mediaUrl;
    protected $_name = [
        'lensInfos' => 'LensInfos',
        'mediaId' => 'MediaId',
        'mediaName' => 'MediaName',
        'mediaUrl' => 'MediaUrl',
    ];

    public function validate()
    {
        if (\is_array($this->lensInfos)) {
            Model::validateArray($this->lensInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lensInfos) {
            if (\is_array($this->lensInfos)) {
                $res['LensInfos'] = [];
                $n1 = 0;
                foreach ($this->lensInfos as $item1) {
                    $res['LensInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }

        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
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
        if (isset($map['LensInfos'])) {
            if (!empty($map['LensInfos'])) {
                $model->lensInfos = [];
                $n1 = 0;
                foreach ($map['LensInfos'] as $item1) {
                    $model->lensInfos[$n1] = lensInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }

        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }

        return $model;
    }
}
