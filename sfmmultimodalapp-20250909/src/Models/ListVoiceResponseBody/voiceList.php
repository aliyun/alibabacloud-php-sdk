<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListVoiceResponseBody;

use AlibabaCloud\Dara\Model;

class voiceList extends Model
{
    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $illustration;

    /**
     * @var string
     */
    public $illustrationAudio;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'gender' => 'Gender',
        'illustration' => 'Illustration',
        'illustrationAudio' => 'IllustrationAudio',
        'language' => 'Language',
        'modelId' => 'ModelId',
        'name' => 'Name',
        'voice' => 'Voice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }

        if (null !== $this->illustration) {
            $res['Illustration'] = $this->illustration;
        }

        if (null !== $this->illustrationAudio) {
            $res['IllustrationAudio'] = $this->illustrationAudio;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
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
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }

        if (isset($map['Illustration'])) {
            $model->illustration = $map['Illustration'];
        }

        if (isset($map['IllustrationAudio'])) {
            $model->illustrationAudio = $map['IllustrationAudio'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        return $model;
    }
}
