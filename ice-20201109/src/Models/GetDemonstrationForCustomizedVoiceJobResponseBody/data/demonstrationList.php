<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponseBody\data;

use AlibabaCloud\Dara\Model;

class demonstrationList extends Model
{
    /**
     * @var int
     */
    public $audioId;
    /**
     * @var string
     */
    public $demoAudio;
    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'audioId'   => 'AudioId',
        'demoAudio' => 'DemoAudio',
        'text'      => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }

        if (null !== $this->demoAudio) {
            $res['DemoAudio'] = $this->demoAudio;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }

        if (isset($map['DemoAudio'])) {
            $model->demoAudio = $map['DemoAudio'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
