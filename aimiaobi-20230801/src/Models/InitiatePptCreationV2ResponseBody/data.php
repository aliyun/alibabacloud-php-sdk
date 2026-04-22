<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InitiatePptCreationV2ResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $exportTaskId;

    /**
     * @var string
     */
    public $pptArtifactCover;

    /**
     * @var string
     */
    public $pptArtifactId;

    /**
     * @var string
     */
    public $pptProcessId;

    /**
     * @var string
     */
    public $signature;
    protected $_name = [
        'appKey' => 'AppKey',
        'exportTaskId' => 'ExportTaskId',
        'pptArtifactCover' => 'PptArtifactCover',
        'pptArtifactId' => 'PptArtifactId',
        'pptProcessId' => 'PptProcessId',
        'signature' => 'Signature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->exportTaskId) {
            $res['ExportTaskId'] = $this->exportTaskId;
        }

        if (null !== $this->pptArtifactCover) {
            $res['PptArtifactCover'] = $this->pptArtifactCover;
        }

        if (null !== $this->pptArtifactId) {
            $res['PptArtifactId'] = $this->pptArtifactId;
        }

        if (null !== $this->pptProcessId) {
            $res['PptProcessId'] = $this->pptProcessId;
        }

        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['ExportTaskId'])) {
            $model->exportTaskId = $map['ExportTaskId'];
        }

        if (isset($map['PptArtifactCover'])) {
            $model->pptArtifactCover = $map['PptArtifactCover'];
        }

        if (isset($map['PptArtifactId'])) {
            $model->pptArtifactId = $map['PptArtifactId'];
        }

        if (isset($map['PptProcessId'])) {
            $model->pptProcessId = $map['PptProcessId'];
        }

        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
