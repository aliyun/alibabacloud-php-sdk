<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class DepartmentSaveHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example feth00jqwls
     *
     * @var string
     */
    public $xAcsBtripSoCorpToken;
    protected $_name = [
        'xAcsBtripSoCorpToken' => 'x-acs-btrip-so-corp-token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xAcsBtripSoCorpToken) {
            $res['x-acs-btrip-so-corp-token'] = $this->xAcsBtripSoCorpToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DepartmentSaveHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-acs-btrip-so-corp-token'])) {
            $model->xAcsBtripSoCorpToken = $map['x-acs-btrip-so-corp-token'];
        }

        return $model;
    }
}
