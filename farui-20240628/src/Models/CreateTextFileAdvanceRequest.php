<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateTextFileAdvanceRequest extends Model
{
    /**
     * @example e9a93201-7e96-4dc1-9678-2832fc132d08
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1714476549
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $textFileName;

    /**
     * @var Stream
     */
    public $textFileUrlObject;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'createTime'        => 'CreateTime',
        'textFileName'      => 'TextFileName',
        'textFileUrlObject' => 'TextFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->textFileName) {
            $res['TextFileName'] = $this->textFileName;
        }
        if (null !== $this->textFileUrlObject) {
            $res['TextFileUrl'] = $this->textFileUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTextFileAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TextFileName'])) {
            $model->textFileName = $map['TextFileName'];
        }
        if (isset($map['TextFileUrl'])) {
            $model->textFileUrlObject = $map['TextFileUrl'];
        }

        return $model;
    }
}
