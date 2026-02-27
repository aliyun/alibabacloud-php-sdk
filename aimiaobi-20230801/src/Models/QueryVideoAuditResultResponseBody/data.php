<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryVideoAuditResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryVideoAuditResultResponseBody\data\imageUrls;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryVideoAuditResultResponseBody\data\results;

class data extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var float
     */
    public $fps;

    /**
     * @var int
     */
    public $frameAudited;

    /**
     * @var int
     */
    public $height;

    /**
     * @var imageUrls[]
     */
    public $imageUrls;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $totalFrameAudit;

    /**
     * @var int
     */
    public $totalFrames;

    /**
     * @var int
     */
    public $totalShots;

    /**
     * @var string
     */
    public $videoFileKey;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'duration' => 'Duration',
        'errorMessage' => 'ErrorMessage',
        'fps' => 'Fps',
        'frameAudited' => 'FrameAudited',
        'height' => 'Height',
        'imageUrls' => 'ImageUrls',
        'results' => 'Results',
        'status' => 'Status',
        'text' => 'Text',
        'totalFrameAudit' => 'TotalFrameAudit',
        'totalFrames' => 'TotalFrames',
        'totalShots' => 'TotalShots',
        'videoFileKey' => 'VideoFileKey',
        'videoUrl' => 'VideoUrl',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }

        if (null !== $this->frameAudited) {
            $res['FrameAudited'] = $this->frameAudited;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['ImageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['ImageUrls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->totalFrameAudit) {
            $res['TotalFrameAudit'] = $this->totalFrameAudit;
        }

        if (null !== $this->totalFrames) {
            $res['TotalFrames'] = $this->totalFrames;
        }

        if (null !== $this->totalShots) {
            $res['TotalShots'] = $this->totalShots;
        }

        if (null !== $this->videoFileKey) {
            $res['VideoFileKey'] = $this->videoFileKey;
        }

        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }

        if (isset($map['FrameAudited'])) {
            $model->frameAudited = $map['FrameAudited'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['ImageUrls'])) {
            if (!empty($map['ImageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['ImageUrls'] as $item1) {
                    $model->imageUrls[$n1] = imageUrls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TotalFrameAudit'])) {
            $model->totalFrameAudit = $map['TotalFrameAudit'];
        }

        if (isset($map['TotalFrames'])) {
            $model->totalFrames = $map['TotalFrames'];
        }

        if (isset($map['TotalShots'])) {
            $model->totalShots = $map['TotalShots'];
        }

        if (isset($map['VideoFileKey'])) {
            $model->videoFileKey = $map['VideoFileKey'];
        }

        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
