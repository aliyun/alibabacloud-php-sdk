<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class SyncThirdUserMappingHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example feth00jqwls
     *
     * @var string
     */
    public $xAcsBtripCorpToken;
    protected $_name = [
        'xAcsBtripCorpToken' => 'x-acs-btrip-corp-token',
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
        if (null !== $this->xAcsBtripCorpToken) {
            $res['x-acs-btrip-corp-token'] = $this->xAcsBtripCorpToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncThirdUserMappingHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-acs-btrip-corp-token'])) {
            $model->xAcsBtripCorpToken = $map['x-acs-btrip-corp-token'];
        }

        return $model;
    }
}
