<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class BindCorpGroupRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpGroupId;
    protected $_name = [
        'corpId'      => 'CorpId',
        'corpGroupId' => 'CorpGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->corpGroupId) {
            $res['CorpGroupId'] = $this->corpGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindCorpGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['CorpGroupId'])) {
            $model->corpGroupId = $map['CorpGroupId'];
        }

        return $model;
    }
}
