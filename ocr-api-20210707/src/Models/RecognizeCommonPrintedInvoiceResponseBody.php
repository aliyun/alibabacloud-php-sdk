<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeCommonPrintedInvoiceResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"angle":0,"data":{"title":"浙江通用机打发票","formType":"发票联","invoiceCode":"133041930432","invoiceNumber":"01488558","printedInvoiceCode":"","printedInvoiceNumber":"","invoiceDate":"2019-11-19","totalAmount":"170.00","sellerName":"嘉兴市南湖区余新镇瘦汁味餐饮店","sellerTaxNumber":"92330402MA28B4LL4B","purchaserName":"阿里巴巴俪人购(上海)电子商务有限公司","purchaserTaxNumber":"91310114312356647G","drawer":"高伟","recipient":"","remarks":"","invoiceDetails":[{"itemName":"餐饮费","unit":"","quantity":"1","unitPrice":"170.00","amount":"170.00"}]},"ftype":0,"height":909,"orgHeight":909,"orgWidth":1437,"prism_keyValueInfo":[{"key":"title","keyProb":100,"value":"浙江通用机打发票","valuePos":[{"x":431,"y":68},{"x":843,"y":62},{"x":843,"y":125},{"x":431,"y":130}],"valueProb":100},{"key":"formType","keyProb":100,"value":"发票联","valuePos":[{"x":507,"y":154},{"x":767,"y":152},{"x":768,"y":214},{"x":508,"y":215}],"valueProb":100},{"key":"invoiceCode","keyProb":100,"value":"133041930432","valuePos":[{"x":990,"y":134},{"x":1283,"y":131},{"x":1283,"y":167},{"x":991,"y":171}],"valueProb":100},{"key":"invoiceNumber","keyProb":100,"value":"01488558","valuePos":[{"x":999,"y":195},{"x":1197,"y":193},{"x":1198,"y":234},{"x":999,"y":235}],"valueProb":100},{"key":"printedInvoiceCode","keyProb":100,"value":"","valueProb":100},{"key":"printedInvoiceNumber","keyProb":100,"value":"","valueProb":100},{"key":"invoiceDate","keyProb":100,"value":"2019-11-19","valuePos":[{"x":153,"y":280},{"x":351,"y":278},{"x":351,"y":309},{"x":154,"y":312}],"valueProb":100},{"key":"totalAmount","keyProb":100,"value":"170.00","valuePos":[{"x":300,"y":752},{"x":461,"y":749},{"x":462,"y":786},{"x":300,"y":788}],"valueProb":100},{"key":"sellerName","keyProb":100,"value":"嘉兴市南湖区余新镇瘦汁味餐饮店","valuePos":[{"x":220,"y":455},{"x":612,"y":450},{"x":612,"y":482},{"x":221,"y":488}],"valueProb":100},{"key":"sellerTaxNumber","keyProb":97,"value":"92330402MA28B4LL4B","valuePos":[{"x":224,"y":511},{"x":476,"y":509},{"x":477,"y":537},{"x":225,"y":539}],"valueProb":97},{"key":"purchaserName","keyProb":98,"value":"阿里巴巴俪人购(上海)电子商务有限公司","valuePos":[{"x":213,"y":327},{"x":714,"y":324},{"x":715,"y":359},{"x":214,"y":363}],"valueProb":98},{"key":"purchaserTaxNumber","keyProb":100,"value":"91310114312356647G","valuePos":[{"x":221,"y":406},{"x":480,"y":402},{"x":481,"y":432},{"x":221,"y":435}],"valueProb":100},{"key":"drawer","keyProb":100,"value":"高伟","valuePos":[{"x":680,"y":819},{"x":680,"y":850},{"x":627,"y":850},{"x":627,"y":819}],"valueProb":100},{"key":"recipient","keyProb":100,"value":"","valueProb":100},{"key":"remarks","keyProb":100,"value":"","valueProb":100},{"key":"invoiceDetails","keyProb":100,"value":"[{\"itemName\":\"餐饮费\",\"unit\":\"\",\"quantity\":\"1\",\"unitPrice\":\"170.00\",\"amount\":\"170.00\"}]","valueProb":100}],"sliceRect":{"x0":0,"y0":7,"x1":1416,"y1":0,"x2":1421,"y2":907,"x3":0,"y3":904},"width":1437}
     *
     * @var string
     */
    public $data;

    /**
     * @example You are not authorized to perform this operation.
     *
     * @var string
     */
    public $message;

    /**
     * @example 43A29C77-405E-4CC0-BC55-EE694AD00655
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeCommonPrintedInvoiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
