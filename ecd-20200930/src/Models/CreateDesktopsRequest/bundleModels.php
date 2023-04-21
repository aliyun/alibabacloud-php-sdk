<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Tea\Model;

class bundleModels extends Model
{
    /**
     * @description The number of cloud desktops that you want to create. Valid values: 1 to 300. Default value: 0.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The ID of the desktop template.
     *
     * @example b-je9hani001wfn****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The name of the cloud desktop.
     *
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The users to whom you want to assign the cloud desktops.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The hostname that you specify for the cloud desktop. You can only specify the hostname of a Windows cloud desktop in the workspace of the enterprise AD account type.
     *
     * The hostname must meet the following requirements:
     *
     *   It must be 2 to 15 characters in length.
     *   It can contain letters, digits, and hyphens (-). The hostname cannot start or end with a hyphen (-), contain consecutive hyphens (-), or contain only digits.
     *
     * If you create multiple cloud desktops, you can use the`  name_prefix[begin_number,bits]name_suffix ` format to determine the hostnames of the cloud desktops. For example, if you set Hostname to ecd-\[1,4]-test, the hostname of the first cloud desktop is ecd-0001-test and the hostname of the second cloud desktop is ecd-0002-test. Other hostnames follow the same rule.
     *
     *   `name_prefix`: the prefix of the hostname.
     *   `[begin_number,bits]`: the ordered numbers in the hostname. begin_number: the start number. Valid values: 0 to 999999. Default value: 0. bits: the digit. Valid values: 1 to 6. Default value: 6.
     *   `name_suffix`: the suffix of the hostname.
     *
     * @example testhost
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Specifies whether to enable disk encryption.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that you want to use when disk encryption is enabled. You can call the [ListKeys](~~28951~~) operation to obtain a list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'amount'                  => 'Amount',
        'bundleId'                => 'BundleId',
        'desktopName'             => 'DesktopName',
        'endUserIds'              => 'EndUserIds',
        'hostname'                => 'Hostname',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bundleModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
