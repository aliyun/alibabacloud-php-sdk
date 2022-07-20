<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultResponseBody\resultList\ext;
use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @var ext
     */
    public $ext;

    /**
     * @var string
     */
    public $hashKey;

    /**
     * @var int
     */
    public $result;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $virusType;
    protected $_name = [
        'ext'       => 'Ext',
        'hashKey'   => 'HashKey',
        'result'    => 'Result',
        'score'     => 'Score',
        'virusType' => 'VirusType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = null !== $this->ext ? $this->ext->toMap() : null;
        }
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->virusType) {
            $res['VirusType'] = $this->virusType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ext'])) {
            $model->ext = ext::fromMap($map['Ext']);
        }
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['VirusType'])) {
            $model->virusType = $map['VirusType'];
        }

        return $model;
    }
}
