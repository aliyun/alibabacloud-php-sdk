<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $biz;

    /**
     * @var string
     */
    public $media;

    /**
     * @var string
     */
    public $outputUrl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'biz' => 'Biz',
        'media' => 'Media',
        'outputUrl' => 'OutputUrl',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }

        if (null !== $this->media) {
            $res['Media'] = $this->media;
        }

        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }

        if (isset($map['Media'])) {
            $model->media = $map['Media'];
        }

        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
