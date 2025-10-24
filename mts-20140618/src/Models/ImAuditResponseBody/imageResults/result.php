<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults\result\results;

class result extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var mixed[]
     */
    public $extras;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'code' => 'code',
        'dataId' => 'dataId',
        'extras' => 'extras',
        'msg' => 'msg',
        'results' => 'results',
        'taskId' => 'taskId',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->extras)) {
            Model::validateArray($this->extras);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }

        if (null !== $this->extras) {
            if (\is_array($this->extras)) {
                $res['extras'] = [];
                foreach ($this->extras as $key1 => $value1) {
                    $res['extras'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }

        if (isset($map['extras'])) {
            if (!empty($map['extras'])) {
                $model->extras = [];
                foreach ($map['extras'] as $key1 => $value1) {
                    $model->extras[$key1] = $value1;
                }
            }
        }

        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
