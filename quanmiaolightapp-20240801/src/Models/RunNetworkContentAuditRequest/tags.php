<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunNetworkContentAuditRequest;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $tagDefinePrompt;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagDefinePrompt' => 'tagDefinePrompt',
        'tagName' => 'tagName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagDefinePrompt) {
            $res['tagDefinePrompt'] = $this->tagDefinePrompt;
        }

        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
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
        if (isset($map['tagDefinePrompt'])) {
            $model->tagDefinePrompt = $map['tagDefinePrompt'];
        }

        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        return $model;
    }
}
