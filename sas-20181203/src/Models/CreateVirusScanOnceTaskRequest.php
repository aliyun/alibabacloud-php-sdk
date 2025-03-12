<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateVirusScanOnceTaskRequest extends Model
{
    /**
     * @description The information about the scan path that is required for a custom scan.
     *
     * @var string[]
     */
    public $scanPath;

    /**
     * @description The type of the virus scan. Valid values:
     *
     *   **system**: system scan.
     *   **user**: custom scan.
     *
     * @example system
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The key that stores the asset information.
     *
     * > You can call the [GetAssetSelectionConfig](~~GetAssetSelectionConfig~~) operation to obtain the key value.
     * @example 845de1ec-4b08-42e1-b564-31321e48xxxx
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scanPath) {
            $res['ScanPath'] = $this->scanPath;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirusScanOnceTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScanPath'])) {
            if (!empty($map['ScanPath'])) {
                $model->scanPath = $map['ScanPath'];
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
