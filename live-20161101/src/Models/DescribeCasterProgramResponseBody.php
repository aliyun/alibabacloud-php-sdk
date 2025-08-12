<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes;

class DescribeCasterProgramResponseBody extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var episodes
     */
    public $episodes;

    /**
     * @var int
     */
    public $programEffect;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'casterId' => 'CasterId',
        'episodes' => 'Episodes',
        'programEffect' => 'ProgramEffect',
        'programName' => 'ProgramName',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->episodes) {
            $this->episodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        if (null !== $this->episodes) {
            $res['Episodes'] = null !== $this->episodes ? $this->episodes->toArray($noStream) : $this->episodes;
        }

        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }

        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        if (isset($map['Episodes'])) {
            $model->episodes = episodes::fromMap($map['Episodes']);
        }

        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }

        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
