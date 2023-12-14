<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\CheckUpgradeVersionResponseBody\patches;

use AlibabaCloud\Tea\Model;

class patch extends Model
{
    /**
     * @var string
     */
    public $internalUrl;

    /**
     * @var string
     */
    public $MD5;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'internalUrl' => 'InternalUrl',
        'MD5'         => 'MD5',
        'name'        => 'Name',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internalUrl) {
            $res['InternalUrl'] = $this->internalUrl;
        }
        if (null !== $this->MD5) {
            $res['MD5'] = $this->MD5;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternalUrl'])) {
            $model->internalUrl = $map['InternalUrl'];
        }
        if (isset($map['MD5'])) {
            $model->MD5 = $map['MD5'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
