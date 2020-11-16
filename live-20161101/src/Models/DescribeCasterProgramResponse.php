<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponse\episodes;
use AlibabaCloud\Tea\Model;

class DescribeCasterProgramResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var int
     */
    public $programEffect;

    /**
     * @var int
     */
    public $total;

    /**
     * @var episodes
     */
    public $episodes;
    protected $_name = [
        'requestId'     => 'RequestId',
        'casterId'      => 'CasterId',
        'programName'   => 'ProgramName',
        'programEffect' => 'ProgramEffect',
        'total'         => 'Total',
        'episodes'      => 'Episodes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('programName', $this->programName, true);
        Model::validateRequired('programEffect', $this->programEffect, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('episodes', $this->episodes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->episodes) {
            $res['Episodes'] = null !== $this->episodes ? $this->episodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterProgramResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Episodes'])) {
            $model->episodes = episodes::fromMap($map['Episodes']);
        }

        return $model;
    }
}
