<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListAccessNumberRequest extends Model
{
    /**
     * @var string
     */
    public $corpIdList;
    protected $_name = [
        'corpIdList' => 'CorpIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpIdList) {
            $res['CorpIdList'] = $this->corpIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpIdList'])) {
            $model->corpIdList = $map['CorpIdList'];
        }

        return $model;
    }
}
