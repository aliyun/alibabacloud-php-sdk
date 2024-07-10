<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\CreateTextFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 36d6447d277c4a1c9fd0def1d16341f1
     *
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
        'textFileId'   => 'TextFileId',
        'textFileName' => 'TextFileName',
        'textFileUrl'  => 'TextFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
