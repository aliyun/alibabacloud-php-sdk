<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulListByIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class effectMsgDTOS extends Model
{
    /**
     * @var string
     */
    public $matchList;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $softName;
    protected $_name = [
        'matchList' => 'MatchList',
        'path'      => 'Path',
        'softName'  => 'SoftName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchList) {
            $res['MatchList'] = $this->matchList;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->softName) {
            $res['SoftName'] = $this->softName;
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
        if (isset($map['MatchList'])) {
            $model->matchList = $map['MatchList'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['SoftName'])) {
            $model->softName = $map['SoftName'];
        }

        return $model;
    }
}
