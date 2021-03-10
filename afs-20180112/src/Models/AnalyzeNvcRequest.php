<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeNvcRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $scoreJsonStr;

    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'scoreJsonStr' => 'ScoreJsonStr',
        'data'         => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->scoreJsonStr) {
            $res['ScoreJsonStr'] = $this->scoreJsonStr;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeNvcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ScoreJsonStr'])) {
            $model->scoreJsonStr = $map['ScoreJsonStr'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
