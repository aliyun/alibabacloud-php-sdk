<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceOssMountRamAuthorizeUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizeUrl;
    protected $_name = [
        'authorizeUrl' => 'AuthorizeUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeUrl) {
            $res['AuthorizeUrl'] = $this->authorizeUrl;
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
        if (isset($map['AuthorizeUrl'])) {
            $model->authorizeUrl = $map['AuthorizeUrl'];
        }

        return $model;
    }
}
