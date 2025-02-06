<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit\cid;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit\keyWords;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit\phrase;

class hit extends Model
{
    /**
     * @var cid
     */
    public $cid;
    /**
     * @var keyWords
     */
    public $keyWords;
    /**
     * @var phrase
     */
    public $phrase;
    protected $_name = [
        'cid'      => 'Cid',
        'keyWords' => 'KeyWords',
        'phrase'   => 'Phrase',
    ];

    public function validate()
    {
        if (null !== $this->cid) {
            $this->cid->validate();
        }
        if (null !== $this->keyWords) {
            $this->keyWords->validate();
        }
        if (null !== $this->phrase) {
            $this->phrase->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = null !== $this->cid ? $this->cid->toArray($noStream) : $this->cid;
        }

        if (null !== $this->keyWords) {
            $res['KeyWords'] = null !== $this->keyWords ? $this->keyWords->toArray($noStream) : $this->keyWords;
        }

        if (null !== $this->phrase) {
            $res['Phrase'] = null !== $this->phrase ? $this->phrase->toArray($noStream) : $this->phrase;
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
        if (isset($map['Cid'])) {
            $model->cid = cid::fromMap($map['Cid']);
        }

        if (isset($map['KeyWords'])) {
            $model->keyWords = keyWords::fromMap($map['KeyWords']);
        }

        if (isset($map['Phrase'])) {
            $model->phrase = phrase::fromMap($map['Phrase']);
        }

        return $model;
    }
}
