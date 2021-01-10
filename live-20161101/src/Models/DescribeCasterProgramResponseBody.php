<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes;
use AlibabaCloud\Tea\Model;

class DescribeCasterProgramResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

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

    /**
     * @var string
     */
    public $programName;

    /**
     * @var string
     */
    public $casterId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'programEffect' => 'ProgramEffect',
        'total'         => 'Total',
        'episodes'      => 'Episodes',
        'programName'   => 'ProgramName',
        'casterId'      => 'CasterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterProgramResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        return $model;
    }
}
