<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateResponseBody\date\faceInfos;

class date extends Model
{
    /**
     * @var faceInfos[]
     */
    public $faceInfos;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $transResult;
    protected $_name = [
        'faceInfos' => 'FaceInfos',
        'templateId' => 'TemplateId',
        'transResult' => 'TransResult',
    ];

    public function validate()
    {
        if (\is_array($this->faceInfos)) {
            Model::validateArray($this->faceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceInfos) {
            if (\is_array($this->faceInfos)) {
                $res['FaceInfos'] = [];
                $n1 = 0;
                foreach ($this->faceInfos as $item1) {
                    $res['FaceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->transResult) {
            $res['TransResult'] = $this->transResult;
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
        if (isset($map['FaceInfos'])) {
            if (!empty($map['FaceInfos'])) {
                $model->faceInfos = [];
                $n1 = 0;
                foreach ($map['FaceInfos'] as $item1) {
                    $model->faceInfos[$n1] = faceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TransResult'])) {
            $model->transResult = $map['TransResult'];
        }

        return $model;
    }
}
