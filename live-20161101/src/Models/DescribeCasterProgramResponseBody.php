<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes;
use AlibabaCloud\Tea\Model;

class DescribeCasterProgramResponseBody extends Model
{
    /**
     * @description The ID of the production studio.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The list of the episodes.
     *
     * @var episodes
     */
    public $episodes;

    /**
     * @description Indicates whether carousel playback is enabled.
     *
     *   **0**: Carousel playback is disabled.
     *   **1**: Carousel playback is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $programEffect;

    /**
     * @description The name of the episode list.
     *
     * @example programs_name
     *
     * @var string
     */
    public $programName;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries.
     *
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->episodes) {
            $res['Episodes'] = null !== $this->episodes ? $this->episodes->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeCasterProgramResponseBody
     */
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
