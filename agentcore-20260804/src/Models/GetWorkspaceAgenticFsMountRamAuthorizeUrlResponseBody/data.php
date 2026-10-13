<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceAgenticFsMountRamAuthorizeUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizeUrl;
    protected $_name = [
        'authorizeUrl' => 'authorizeUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeUrl) {
            $res['authorizeUrl'] = $this->authorizeUrl;
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
        if (isset($map['authorizeUrl'])) {
            $model->authorizeUrl = $map['authorizeUrl'];
        }

        return $model;
    }
}
