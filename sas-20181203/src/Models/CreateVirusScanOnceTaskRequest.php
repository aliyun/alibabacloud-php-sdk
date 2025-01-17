<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateVirusScanOnceTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $scanPath;
    /**
     * @var string
     */
    public $scanType;
    /**
     * @var string
     */
    public $selectionKey;
    protected $_name = [
        'scanPath'     => 'ScanPath',
        'scanType'     => 'ScanType',
        'selectionKey' => 'SelectionKey',
    ];

    public function validate()
    {
        if (\is_array($this->scanPath)) {
            Model::validateArray($this->scanPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scanPath) {
            if (\is_array($this->scanPath)) {
                $res['ScanPath'] = [];
                $n1              = 0;
                foreach ($this->scanPath as $item1) {
                    $res['ScanPath'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
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
        if (isset($map['ScanPath'])) {
            if (!empty($map['ScanPath'])) {
                $model->scanPath = [];
                $n1              = 0;
                foreach ($map['ScanPath'] as $item1) {
                    $model->scanPath[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }

        return $model;
    }
}
