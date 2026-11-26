<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteAssetResponseBody\data\chunkConfiguration;

use AlibabaCloud\Dara\Model;

class preprocessRules extends Model
{
    /**
     * @var bool
     */
    public $removeUrlsAndEmails;

    /**
     * @var bool
     */
    public $replaceConsecutiveWhitespace;
    protected $_name = [
        'removeUrlsAndEmails' => 'removeUrlsAndEmails',
        'replaceConsecutiveWhitespace' => 'replaceConsecutiveWhitespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->removeUrlsAndEmails) {
            $res['removeUrlsAndEmails'] = $this->removeUrlsAndEmails;
        }

        if (null !== $this->replaceConsecutiveWhitespace) {
            $res['replaceConsecutiveWhitespace'] = $this->replaceConsecutiveWhitespace;
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
        if (isset($map['removeUrlsAndEmails'])) {
            $model->removeUrlsAndEmails = $map['removeUrlsAndEmails'];
        }

        if (isset($map['replaceConsecutiveWhitespace'])) {
            $model->replaceConsecutiveWhitespace = $map['replaceConsecutiveWhitespace'];
        }

        return $model;
    }
}
