<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteDataExportShrinkRequest extends Model
{
    /**
     * @description The parameters that are required to perform the operation. Sample code:
     *
     * ```json
     * {
     * "mode" : "FAST",   // The mode in which data is exported. Default value: FAST. A value of NORMAL specifies that the export task can be terminated during the export.  "encoding" : "UTF8",  // The encoding format.  "startTime" : "2022-12-22 00:00:00",  // The point in time at which data export starts.  "transaction" : false,    // Specifies whether to enable transactions.  "fileType" : "SQL"    // The format of the exported file.}
     * ```
     *
     * >  You can also set mode, encoding, and fileType to the following values:
     *
     *   mode: NORMAL
     *
     *   encoding: UTF8MB4, GB2312, ISO_8859_1, GBK, LATAIN1, or CP1252
     *
     *   fileType: XLSX, CSV, JSON, or TXT
     *
     * @example {    "fileType": "CSV",    "encoding": ""  }
     *
     * @var string
     */
    public $actionDetailShrink;

    /**
     * @description The ID of the ticket.
     *
     * This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the Alibaba Cloud account that is used to call the API operation.
     *
     * @example 21400447956867****
     *
     * @var string
     */
    public $realLoginUserUid;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, log on to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     *
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'actionDetailShrink' => 'ActionDetail',
        'orderId' => 'OrderId',
        'realLoginUserUid' => 'RealLoginUserUid',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDetailShrink) {
            $res['ActionDetail'] = $this->actionDetailShrink;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteDataExportShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionDetail'])) {
            $model->actionDetailShrink = $map['ActionDetail'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
