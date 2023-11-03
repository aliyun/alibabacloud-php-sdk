<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetObjectScanEventResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetObjectScanEventResponseBody\data\details;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @example WebShell
     *
     * @var string
     */
    public $eventName;

    /**
     * @example sca_2023****
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 0552c44e243abdea1729d4507bce****
     *
     * @var string
     */
    public $md5;
    protected $_name = [
        'details'   => 'Details',
        'eventName' => 'EventName',
        'fileName'  => 'FileName',
        'md5'       => 'Md5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        return $model;
    }
}
