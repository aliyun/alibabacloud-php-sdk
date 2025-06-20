<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;

class AnalyzeImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $imageUrls;

    /**
     * @var string
     */
    public $responseFormatType;

    /**
     * @var string[]
     */
    public $resultTypes;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'imageUrls' => 'imageUrls',
        'responseFormatType' => 'responseFormatType',
        'resultTypes' => 'resultTypes',
        'stream' => 'stream',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrls)) {
            Model::validateArray($this->imageUrls);
        }
        if (\is_array($this->resultTypes)) {
            Model::validateArray($this->resultTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrls) {
            if (\is_array($this->imageUrls)) {
                $res['imageUrls'] = [];
                $n1 = 0;
                foreach ($this->imageUrls as $item1) {
                    $res['imageUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseFormatType) {
            $res['responseFormatType'] = $this->responseFormatType;
        }

        if (null !== $this->resultTypes) {
            if (\is_array($this->resultTypes)) {
                $res['resultTypes'] = [];
                $n1 = 0;
                foreach ($this->resultTypes as $item1) {
                    $res['resultTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
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
        if (isset($map['imageUrls'])) {
            if (!empty($map['imageUrls'])) {
                $model->imageUrls = [];
                $n1 = 0;
                foreach ($map['imageUrls'] as $item1) {
                    $model->imageUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['responseFormatType'])) {
            $model->responseFormatType = $map['responseFormatType'];
        }

        if (isset($map['resultTypes'])) {
            if (!empty($map['resultTypes'])) {
                $model->resultTypes = [];
                $n1 = 0;
                foreach ($map['resultTypes'] as $item1) {
                    $model->resultTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
