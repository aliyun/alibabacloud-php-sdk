<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePrinterEventsResponseBody;

use AlibabaCloud\Dara\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $printerDriver;

    /**
     * @var int
     */
    public $printerJobCopies;

    /**
     * @var string
     */
    public $printerJobName;

    /**
     * @var int
     */
    public $printerJobPages;

    /**
     * @var int
     */
    public $printerJobPrintedPages;

    /**
     * @var int
     */
    public $printerJobSize;

    /**
     * @var int
     */
    public $printerJobTime;

    /**
     * @var string
     */
    public $printerName;

    /**
     * @var string
     */
    public $printerPort;

    /**
     * @var int
     */
    public $printerRedirType;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endUserId' => 'EndUserId',
        'eventId' => 'EventId',
        'printerDriver' => 'PrinterDriver',
        'printerJobCopies' => 'PrinterJobCopies',
        'printerJobName' => 'PrinterJobName',
        'printerJobPages' => 'PrinterJobPages',
        'printerJobPrintedPages' => 'PrinterJobPrintedPages',
        'printerJobSize' => 'PrinterJobSize',
        'printerJobTime' => 'PrinterJobTime',
        'printerName' => 'PrinterName',
        'printerPort' => 'PrinterPort',
        'printerRedirType' => 'PrinterRedirType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->printerDriver) {
            $res['PrinterDriver'] = $this->printerDriver;
        }

        if (null !== $this->printerJobCopies) {
            $res['PrinterJobCopies'] = $this->printerJobCopies;
        }

        if (null !== $this->printerJobName) {
            $res['PrinterJobName'] = $this->printerJobName;
        }

        if (null !== $this->printerJobPages) {
            $res['PrinterJobPages'] = $this->printerJobPages;
        }

        if (null !== $this->printerJobPrintedPages) {
            $res['PrinterJobPrintedPages'] = $this->printerJobPrintedPages;
        }

        if (null !== $this->printerJobSize) {
            $res['PrinterJobSize'] = $this->printerJobSize;
        }

        if (null !== $this->printerJobTime) {
            $res['PrinterJobTime'] = $this->printerJobTime;
        }

        if (null !== $this->printerName) {
            $res['PrinterName'] = $this->printerName;
        }

        if (null !== $this->printerPort) {
            $res['PrinterPort'] = $this->printerPort;
        }

        if (null !== $this->printerRedirType) {
            $res['PrinterRedirType'] = $this->printerRedirType;
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['PrinterDriver'])) {
            $model->printerDriver = $map['PrinterDriver'];
        }

        if (isset($map['PrinterJobCopies'])) {
            $model->printerJobCopies = $map['PrinterJobCopies'];
        }

        if (isset($map['PrinterJobName'])) {
            $model->printerJobName = $map['PrinterJobName'];
        }

        if (isset($map['PrinterJobPages'])) {
            $model->printerJobPages = $map['PrinterJobPages'];
        }

        if (isset($map['PrinterJobPrintedPages'])) {
            $model->printerJobPrintedPages = $map['PrinterJobPrintedPages'];
        }

        if (isset($map['PrinterJobSize'])) {
            $model->printerJobSize = $map['PrinterJobSize'];
        }

        if (isset($map['PrinterJobTime'])) {
            $model->printerJobTime = $map['PrinterJobTime'];
        }

        if (isset($map['PrinterName'])) {
            $model->printerName = $map['PrinterName'];
        }

        if (isset($map['PrinterPort'])) {
            $model->printerPort = $map['PrinterPort'];
        }

        if (isset($map['PrinterRedirType'])) {
            $model->printerRedirType = $map['PrinterRedirType'];
        }

        return $model;
    }
}
