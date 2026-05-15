<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveRecordVodConfigRequest;

use AlibabaCloud\Dara\Model;

class recordFormat extends Model
{
    /**
     * @var string
     */
    public $autoCompose;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $processMethod;

    /**
     * @var string
     */
    public $processTemplateId;

    /**
     * @var int
     */
    public $sliceDuration;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $videoProcess;
    protected $_name = [
        'autoCompose' => 'AutoCompose',
        'format' => 'Format',
        'processMethod' => 'ProcessMethod',
        'processTemplateId' => 'ProcessTemplateId',
        'sliceDuration' => 'SliceDuration',
        'tags' => 'Tags',
        'videoProcess' => 'VideoProcess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCompose) {
            $res['AutoCompose'] = $this->autoCompose;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->processMethod) {
            $res['ProcessMethod'] = $this->processMethod;
        }

        if (null !== $this->processTemplateId) {
            $res['ProcessTemplateId'] = $this->processTemplateId;
        }

        if (null !== $this->sliceDuration) {
            $res['SliceDuration'] = $this->sliceDuration;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->videoProcess) {
            $res['VideoProcess'] = $this->videoProcess;
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
        if (isset($map['AutoCompose'])) {
            $model->autoCompose = $map['AutoCompose'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['ProcessMethod'])) {
            $model->processMethod = $map['ProcessMethod'];
        }

        if (isset($map['ProcessTemplateId'])) {
            $model->processTemplateId = $map['ProcessTemplateId'];
        }

        if (isset($map['SliceDuration'])) {
            $model->sliceDuration = $map['SliceDuration'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['VideoProcess'])) {
            $model->videoProcess = $map['VideoProcess'];
        }

        return $model;
    }
}
