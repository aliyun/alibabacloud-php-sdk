<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AuthorizeAppProxyOpsResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $ramAuthLink;

    /**
     * @var string
     */
    public $tmpTicket;
    protected $_name = [
        'authorized' => 'Authorized',
        'ramAuthLink' => 'RamAuthLink',
        'tmpTicket' => 'TmpTicket',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->ramAuthLink) {
            $res['RamAuthLink'] = $this->ramAuthLink;
        }

        if (null !== $this->tmpTicket) {
            $res['TmpTicket'] = $this->tmpTicket;
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
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }

        if (isset($map['RamAuthLink'])) {
            $model->ramAuthLink = $map['RamAuthLink'];
        }

        if (isset($map['TmpTicket'])) {
            $model->tmpTicket = $map['TmpTicket'];
        }

        return $model;
    }
}
