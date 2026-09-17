<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateKnowledgeBaseRequest\chunkConfiguration;

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
        'removeUrlsAndEmails' => 'RemoveUrlsAndEmails',
        'replaceConsecutiveWhitespace' => 'ReplaceConsecutiveWhitespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->removeUrlsAndEmails) {
            $res['RemoveUrlsAndEmails'] = $this->removeUrlsAndEmails;
        }

        if (null !== $this->replaceConsecutiveWhitespace) {
            $res['ReplaceConsecutiveWhitespace'] = $this->replaceConsecutiveWhitespace;
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
        if (isset($map['RemoveUrlsAndEmails'])) {
            $model->removeUrlsAndEmails = $map['RemoveUrlsAndEmails'];
        }

        if (isset($map['ReplaceConsecutiveWhitespace'])) {
            $model->replaceConsecutiveWhitespace = $map['ReplaceConsecutiveWhitespace'];
        }

        return $model;
    }
}
