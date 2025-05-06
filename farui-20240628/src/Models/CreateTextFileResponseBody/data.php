<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $textFileId;

    /**
     * @var string
     */
    public $textFileName;

    /**
     * @var string
     */
    public $textFileUrl;
    protected $_name = [
        'textFileId' => 'TextFileId',
        'textFileName' => 'TextFileName',
        'textFileUrl' => 'TextFileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textFileId) {
            $res['TextFileId'] = $this->textFileId;
        }

        if (null !== $this->textFileName) {
            $res['TextFileName'] = $this->textFileName;
        }

        if (null !== $this->textFileUrl) {
            $res['TextFileUrl'] = $this->textFileUrl;
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
        if (isset($map['TextFileId'])) {
            $model->textFileId = $map['TextFileId'];
        }

        if (isset($map['TextFileName'])) {
            $model->textFileName = $map['TextFileName'];
        }

        if (isset($map['TextFileUrl'])) {
            $model->textFileUrl = $map['TextFileUrl'];
        }

        return $model;
    }
}
